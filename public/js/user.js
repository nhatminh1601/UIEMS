$(function () {


    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveUser()
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
            deleteUser: '',
            updateUser: '',
            addUser: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'TenDangNhap': 'admin',
            'CanBo': 'Nguyễn Văn A'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteUser(value));

            },
            'click .js-edit': (e, value, row, index) => {
                alert(row)
                $('#user-popup').modal('toggle');
                callAnythingOneTimes(updateUser(value, row))
            }
        }
        let columns = user_table.ManagerUserTable(events);
        user_table.Init('user_table', data, columns, 'STT');
    }




    function SaveUser() {
        $('#user-popup').modal('hide'); //.modal('toggle');
    }

    function deleteUser(id) {
        getApi('/');
    }

    function updateUser(id, User) {
        postApi('/', {})
    }

    function addUser(User) {
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