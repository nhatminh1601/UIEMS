$(function () {

    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveAssignment()
    })
    $(document).on('focus', ':input', function () {
        $(this).attr({
            'autocomplete': 'off',
            'maxlength': '255'
        });
    });
    $('.input-group.date').datepicker({
    });
    $('.select2').select2()
    // end event

    function Init() {
        let url = {
            deleteAssignment: '',
            updateAssignment: '',
            addAssignment: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'HoTen': 'Nguyễn Văn A',
            'NgayThi': '01/02/2019',
            'PhongThi': 'C33',
            'Ca': 'Sáng',
            'MonThi': 'Toán',
            'KyThi': 'Khối A 2019'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteAssignment(value));

            },
            'click .js-edit': (e, value, row, index) => {
                alert(row)
                $('#assignment-popup').modal('toggle');
                callAnythingOneTimes(updateAssignment(value, row))
            }
        }
        let columns = assignment_table.ManagerAssignmentTable(events);
        assignment_table.Init('assignment_table', data, columns, 'NgayThi');
    }




    function SaveAssignment() {
        $('#assignment-popup').modal('hide'); //.modal('toggle');
    }

    function deleteAssignment(id) {
        getApi('/');
    }

    function updateAssignment(id, Assignment) {
        postApi('/', {})
    }

    function addAssignment(Assignment) {
        postApi('/', {})
    }

    function callAnythingOneTimes(input, countClick) {

        if (countClick === 0) {
            input
        }
        countClick++
        setTimeout(function () {
            countClick = 0
        }, 500)
    }

    function getApi(url, param) {
        $.ajax({
            url: url,
            type: "POST", //send it through get method
            data: param,
            headers: {
                'accept': 'application/json;odata=verbose',
                'content-Type': 'application/json;odata=verbose'
            },
            success: function (response) {
                //Do Something
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function postApi(url, param) {
        $.ajax({
            url: url,
            type: "POST", //send it through get method
            data: JSON.stringify(param),
            headers: {
                'accept': 'application/json;odata=verbose',
                'content-Type': 'application/json;odata=verbose'
            },
            success: function (response) {
                //Do Something
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }
})