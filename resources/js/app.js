require('./bootstrap');

// ES6 Modules or TypeScript
import Swal from 'sweetalert2';
// import Vue from 'vue';

var element = document.getElementById("delete");
    element.addEventListener('submit',function(e) {

        e.preventDefault();
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.'
                    // 'success'
                );
                element.submit();
            }
        })
    }
);