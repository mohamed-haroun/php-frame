$(document).ready(function () {
    let table = $('#example').DataTable({
        buttons: ['excel', 'pdf', 'print']
    });
    table.buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
});

$("#documented").on('mousedown', function () {
    let doc = confirm("Is shipment documented");
    if (doc) {
        $.ajax({
            type: "POST",
            url: "/shipments/setDocumented",
            error: function (request, error) {
                alert(" Can't do because: " + error);
            },
            success: function () {
                const alertPlaceholder = document.getElementById('showMessage')

                const alert = (message, type) => {
                    const wrapper = document.createElement('div');
                    wrapper.innerHTML = [
                        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                        `   <div>Document Status is changed successfully!!!</div>`,
                        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                        '</div>'
                    ].join('')

                    alertPlaceholder.append(wrapper)
                }

                alert('Note is add successfully !!', 'success')
                event.preventDefault();
            }
        })
    }
});