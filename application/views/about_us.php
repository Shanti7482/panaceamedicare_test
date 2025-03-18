<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom Select Example with Icons</title>

    <!-- Bootstrap CSS (v5.3.0) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tom Select CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/1.7.4/css/tom-select.css" rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <style>
    /* Custom styles for icon alignment */
    .tom-select .option {
        display: flex;
        align-items: center;
    }

    .tom-select .option i {
        margin-right: 8px;
        /* Space between icon and text */
    }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2>Tom Select Dropdown with Icons</h2>
        <select id="icon-select" class="form-select">
            <option value="" disabled selected>Select an option</option>
            <option value="1" data-icon="<i class='fas fa-star'></i>">One</option>
            <option value="2" data-icon="<i class='fas fa-heart'></i>">Two</option>
            <option value="3" data-icon="<i class='fas fa-check'></i>">Three</option>
            <option value="4" data-icon="<i class='fas fa-user'></i>">Four</option>
        </select>
    </div>

    <!-- jQuery (v3.7.1) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JS (v5.3.0) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tom Select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/1.7.4/tom-select.complete.min.js"></script>

    <script>
    $(document).ready(function() {
        // Check if TomSelect is loaded
        if (typeof TomSelect !== 'undefined') {
            // Initialize Tom Select
            new TomSelect('#icon-select', {
                valueField: 'value',
                labelField: 'text',
                searchField: 'text',
                load: function(query, callback) {
                    callback();
                },
                onOptionRender: function(item, escape) {
                    const icon = $(item).data('icon');
                    return `<div class="option" data-value="${item.value}">${icon} ${escape(item.text)}</div>`;
                },
                onItemRender: function(item, escape) {
                    const icon = $(item).data('icon');
                    return `<div class="option" data-value="${item.value}">${icon} ${escape(item.text)}</div>`;
                }
            });
        } else {
            console.error('TomSelect is not loaded. Please check the CDN link.');
        }
    });
    </script>

</body>

</html>