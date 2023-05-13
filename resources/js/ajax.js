let num = 0;
$("#addPackage").click( function () {
    num++;

    let item = `
        <div class="col-md-3 bg-white me-auto rounded-3 shadow p-3">
        <h6 class="text-primary-emphasis">Package ${num}</h6>
        <div class="col-md-12 mb-3">
            <label for="packageNum${num}" class="form-label">No. Packets</label>
            <input type="text" name="packageNum${num}" class="form-control border-primary-subtle" id="packageNum${num}">
        </div>
        <div class="col-md-12 mb-3">
            <label for="packageType${num}" class="form-label">Type of Packets</label>
            <input type="text" name="packageType${num}" class="form-control border-primary-subtle" id="packageType${num}">
        </div>
        <div class="col-md-12 mb-3">
            <label for="nw${num}" class="form-label">Net Weight</label>
            <input type="text" name="nw${num}" class="form-control border-primary-subtle" id="nw${num}">
        </div>
        <div class="col-md-12 mb-3">
            <label for="gw${num}" class="form-label">Gross Weight</label>
            <input type="text" name="gw${num}" class="form-control border-primary-subtle" id="gw${num}">
        </div>
        <div class="col-md-12 mb-3">
            <label for="lot${num}" class="form-label">Lot Number</label>
            <input type="text" name="lot${num}" class="form-control border-primary-subtle" id="lot${num}">
        </div>
        <div class="col-md-12 mb-3">
            <label for="wunit${num}" class="form-label">Weight Unit</label>
            <select id="wunit${num}" name="wunit${num}" class="form-select border-primary-subtle">
                <option value="g">Gram(g)</option>
                <option value="Kg" selected>Kilogram(kg)</option>
                <option value="Lb">Ton(t)</option>
                <option value="T">Pound(lb)</option>
            </select>
        </div>
        </div>`;

    $('#packages').append(item);
});

$("#addNoteButton").on('click', function () {
    let noteForm = `
<div class="me-auto my-2">
<form class="row row-cols-lg-auto align-items-end" method="post" action="/shipments/add_note">
  <div class="col-12 ms-auto pe-0 w-75">
    <div class="input-group">
      <input type="text" name="note" class="form-control" id="inlineFormInputGroupUsername" placeholder="Enter a note">
    </div>
  </div>
  <div class="col-12 me-auto ps-0">
    <button type="submit" class="btn btn-danger">Add Note</button>
  </div>
</form>
</div>`;
    $("#notes").prepend(noteForm);
});

$("#newNote").on('submit', function (event) {
    let dataString = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "/shipments/add_note",
        data: dataString,
        error: function (request, error) {
            alert(" Can't do because: " + error);
        },
        success: function (){
            const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

            const alert = (message, type) => {
                const wrapper = document.createElement('div');
                wrapper.innerHTML = [
                    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                    `   <div>${message}</div>`,
                    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                    '</div>'
                ].join('')

                alertPlaceholder.append(wrapper)
            }

            alert('Note is add successfully !!', 'success')
            event.preventDefault();
        }
    });
});