// Check if passwords match
$("#pwdId, #confirmPassword").on("keyup", function () {
    if (
      $("#newPassword").val() != "" &&
      $("#confirmPassword").val() != "" &&
      $("#confirmPassword").val() == $("#confirmPassword").val()
    ) {
    }
  });

(function() {
        'use strict'

        // ดึงแบบฟอร์มทั้งหมดที่เราต้องการใช้สไตล์การตรวจสอบ Bootstrap แบบกำหนดเอง
        var forms = document.querySelectorAll('.needs-validation')

        // วนซ้ำและป้องกันการส่ง ไม่ให้ส่งเป็นค่าว่าง
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    } else {
                        // Display a success alert using SweetAlert2
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'บันทึกผลสำเร็จ!',
                            showConfirmButton: false,
                        })

                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()