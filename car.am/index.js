// $(document).ready(function() {
//     $(document).on('click', '.delete-btn', function(event) {
//         var index = $(this).data('index');
//         $.ajax({
//             type: 'POST',
//             url: 'index.php',
//             data: {
//                 delete: index
//             },
//             success: function(response) {
//                 $('.car-item[data-index="' + index + '"]').remove();
//             },
//             error: function(xhr, status, error) {
//                 console.error(error);
//             }
//         });
//     });
// });


// $('#create-car-form').submit(function(event) {
//     event.preventDefault();

//     var formData = new FormData(this);
//     formData.append('ajax', 'true');

//     $.ajax({
//         type: 'POST',
//         url: 'Create.php',
//         data: formData,
//         processData: false,
//         contentType: false, 
//         success: function(response) {
//             var res = JSON.parse(response);
//             if (res.status == 'success') {
//                 window.location.href = 'index.php';
//             } else {
//                 alert('Failed to add car.');
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error(error);
//         }
//     });
// });


// $('#edit-car-form').submit(function(event) {
//     event.preventDefault();

//     var formData = new FormData(this);
//     formData.append('ajax', 'true');

//     $.ajax({
//         type: 'POST',
//         url: 'Edit.php',
//         data: formData,
//         processData: false,
//         contentType: false,
//         success: function(response) {
//             var res = JSON.parse(response);
//             if (res.status == 'success') {
//                 window.location.href = 'index.php';
//             } else {
//                 alert('Failed to update car.');
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error(error);
//             alert('Error occurred while updating car.');
//         }
//     });
// });




$(document).ready(function() {
    $(document).on('click', '.delete-btn', function(event) {
        // var index = $(this).data('index');
        var id = $(this).data('index');
        
        ajaxHelper({
            url: 'index.php',
            data: { delete: id },
            success: removeItem(id),
            error: handleError()
        });
    });
});


$('#create-car-form').submit(function(event) {

    ajaxHelper({
        url: 'create.php',
        success: handleFormSubmit(),
        error: handleError('Error occurred while adding car.')
    });
});


// $('#edit-car-form').submit(function(event) {
//     var id = $(this).data('index');
//     console.log(id);
//     ajaxHelper({
//         url: 'edit.php',
//         data: { edit: id },
//         success: handleFormSubmit(),
//         error: handleError('Error occurred while updating car.'),
//     });
// });

function ajaxHelper(options) {
    $.ajax({
        type: options.type || 'POST',
        url: options.url,
        data: options.data,
        success: options.success,
        error: options.error
    });
}


function removeItem(index) {
    return function() {
        $('.car-item[data-index="' + index + '"]').remove();
    };
}

function handleFormSubmit(response) {
    var res = JSON.parse(response);
    if (res.status === 'success') {
        window.location.href = 'index.php';
    } else {
        alert('Failed to process request.');
    }
}

function handleError(message) {
    return function(xhr, status, error) {
        console.error(error);
        if (message) {
            alert(message);
        }
    };
}
