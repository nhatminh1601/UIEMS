$(function () {


    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveRoom()
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
            deleteRoom: '',
            updateRoom: '',
            addRoom: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'Ten': 'C33',
            'DiaDiem': 'NVC, Q5',
            'NgayThi': '02/03/2019',
            'KyThi': 'Khối A 2019',
            'MonThi': 'Toán',
            'Ca': 'Sáng'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteRoom(value));

            },
            'click .js-edit': (e, value, row, index) => {
                alert(row)
                $('#room-popup').modal('toggle');
                callAnythingOneTimes(updateRoom(value, row))
            }
        }
        let columns = room_table.ManagerRoomTable(events);
        room_table.Init('room_table', data, columns, 'HoTen');
    }




    function SaveRoom() {
        $('#room-popup').modal('hide'); //.modal('toggle');
    }

    function deleteRoom(id) {
        getApi('/');
    }

    function updateRoom(id, Room) {
        postApi('/', {})
    }

    function addRoom(Room) {
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