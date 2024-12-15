[...document.querySelectorAll('.input100')].forEach(function (input) {
    input.addEventListener('blur', function (e) {
        if (e.target.value.trim() !== '') {
            e.target.classList.add('has-val');
        } else {
            e.target.classList.remove('has-val');
        }
    });
});

let isShowPassword = false;
document.querySelector('.btn-show-pass').addEventListener('click', function(e) {
    if (!isShowPassword) {
        e.target.closest('.wrap-input100').querySelector('input').setAttribute('type', 'text');
        e.target.closest('.wrap-input100').querySelector('i').classList.remove('zmdi-eye');
        e.target.closest('.wrap-input100').querySelector('i').classList.add('zmdi-eye-off');
        isShowPassword = true;
    } else {
        e.target.closest('.wrap-input100').querySelector('input').setAttribute('type', 'password');
        e.target.closest('.wrap-input100').querySelector('i').classList.add('zmdi-eye');
        e.target.closest('.wrap-input100').querySelector('i').classList.remove('zmdi-eye-off');
        isShowPassword = false;
    }
});
