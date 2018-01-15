/**
 * Created by eazypen on 1/14/2018.
 */
(function () {
    // Form Validation
    document.querySelectorAll('input, textarea').forEach(function(input) {
        input.addEventListener('blur', Form.validate);
    });

    // document.getElementById('image').addEventListener('change', Form.validate);
    document.getElementById('form').addEventListener('submit', Form.submit);
})();


// $(document).ready(function () {
//     $('#datatable').DataTable();
// });