function clear_form_danger(){
    $('.has-danger').removeClass('has-danger');
    $('.form-control-danger').removeClass('form-control-danger');
    $('.form-control-feedback').empty();
}

const form = function(){
    toastr.options = {
		closeButton: true,
		debug: false,
		newestOnTop: true,
		progressBar: true,
		positionClass: 'toast-bottom-right',
		preventDuplicates: false,
		onclick: null,
		showDuration: 300,
		hideDuration: 1000,
		timeOut: 5000,
		extendedTimeOut: 1000,
		showEasing: 'swing',
		hideEasing: 'linear',
		showMethod: 'slideDown',
		hideMethod: 'fadeOut'
	}


    $('form.xform').each(function(){

        let form = $(this);

        form.attr('onsubmit', 'return false')

        form.off('submit').on('submit', function(){
            let action = form.attr('action'),
                method = form.attr('method');

            var data = new FormData(this)

            $.each($(this).data(), function(name, value){

                data.append(name, value)
            })

            form.trigger('xform-submit', [data])

            $.ajax({
                url : action,
                type : method,
                data: data,
                processData: false,
                contentType: false,
                beforeSend: function () {
					Swal.fire({
						title: 'Data sedang diproses...',
						html: 'Tunggu sebentar...',
						allowEscapeKey: false,
						allowOutsideClick: false,
						didOpen: () => {
							Swal.showLoading()
						}
					});
				},
                success : function(res){
                    swal.close()

                    let fields = [
                        form.find('input'),
                        form.find('select'),
                        form.find('textarea')
                    ]

                    for(i in fields){

                        fields[i].removeClass('is-invalid')
                        fields[i].parent().find('span.invalid-feedback').remove()
                    }

                    if ('success' == res.status) {

                        form.trigger('xform-success', [res])

                    } else if ('info' == res.status) {

                        form.trigger('xform-info', [res])

                    } else if ('error' == res.status) {

                        $('.card-login').removeClass('animate__zoomInUp').addClass('animate__jello');
                        form.trigger('xform-error', [res])

                    } else if ('warning' == res.status) {

                        form.trigger('xform-warning', [res])
                    }


                    if (res.resets) {

                        if('all' === res.resets) {

                            form.trigger('reset')
                            form.find('label.custom-file-label').html('Choose file')

                        } else {

                            for(i in res.resets) {

                                let name = res.resets[i]
                                form.find('input[name="'+name+'"]').val('')
                                form.find('select[name="'+name+'"]').val('')
                                form.find('textarea[name="'+name+'"]').html('')
                                form.find('label.custom-file-label').html('')
                            }
                        }
                    }

                    if (res.errors) {

                        focus_first_error_field = true

                        for(field in res.errors) {

                            let message = res.errors[field][0]

                            let fields = [
                                form.find('input[name="'+field+'"]'),
                                form.find('select[name="'+field+'"]'),
                                form.find('textarea[name="'+field+'"]')
                            ]

                            for(i in fields){

                                fields[i].addClass('is-invalid')
                                fields[i].parent().append('<span class="invalid-feedback">' + message + '</span>')

                                if (focus_first_error_field) {
                                    fields[i].focus()
                                    focus_first_error_field = false
                                }
                            }
                        }
                    }

                    if (res.toast) {

                        if ('success' == res.status) {

                            toastr.success(res.toast)
                        } else if ('info' == res.status) {

                            toastr.info(res.toast)
                        } else if ('error' == res.status) {

                            toastr.error(res.toast)
                        } else if ('warning' == res.status) {

                            toastr.warning(res.toast)
                        }
                    }

                    if (res.redirect) {

                        setTimeout(function(){
                            window.location.href = res.redirect
                        }, 2000)
                    }
                },
                error: function(err){
                    swal.close()

                    if(err.responseJSON){
                        toastr.error(err.statusText + ' | ' + err.responseJSON.message)
                    }else{
                        toastr.error(err.statusText)
                    }
                }
            })
        })
    })
}


$(function(){
    form()
})
