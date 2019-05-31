$(function () {


    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveDepartment()
    })
    $(document).on('focus', ':input', function () {
        $(this).attr({
            'autocomplete': 'off',
            'maxlength': '255'
        });
    });
    $('.input-group.date').datepicker({
    });
    // end event

    function Init() {
        let url = {
            deleteDepartment: '',
            updateDepartment: '',
            addDepartment: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'Ten': 'Phòng Đào tạo'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteDepartment(value));

            },
            'click .js-edit': (e, value, row, index) => {
                alert(row)
                $('#department-popup').modal('toggle');
                callAnythingOneTimes(updateDepartment(value, row))
            }
        }
        let columns = department_table.ManagerDepartmentTable(events);
        department_table.Init('department_table', data, columns, 'Ten');
    }




    function SaveDepartment() {
        $('#department-popup').modal('hide'); //.modal('toggle');
    }

    function deleteDepartment(id) {
        getApi('/');
    }

    function updateDepartment(id, Department) {
        postApi('/', {})
    }

    function addDepartment(Department) {
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