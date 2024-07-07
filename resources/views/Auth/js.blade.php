<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    function login() {
        $.ajax({
            url: '{{ route('rota.login') }}',
            type: 'POST',
            data: {
                username: $('#username').val(),
                password: $('#password').val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Login successful:', response);
            },
            error: function(xhr, status, error) {
                console.log('Login failed:', xhr.responseText);
            }
        });
    }

    function register(){
        $.ajax({
            url: '{{ route('route.register.register') }}',
            type: 'POST',
            data: {
                username: $('#username').val(),
                password: $('#password').val()
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function (){
                var password = $('#password').val();
                var confirmaPassword = $('#confirmPassword').val();
                toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
        
                if(password != confirmaPassword){
                    toastr["error"]("Senhas diferentes!!");
                    return false;
                }
            },
            success: function(response){
                toastr["success"](response.status);
                $('#username').val('');
                $('#password').val('');
                $('#confirmPassword').val('');
            },
            error: function(xhr, status, error) {
                var response = JSON.parse(xhr.responseText);
                toastr["error"](response.message);

            }
        })
    }


</script>