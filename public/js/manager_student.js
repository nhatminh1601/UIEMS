$(function () {

    let printListStudent = true;
    let isUpdateStudent = false;
    let title = {
        printListStudent: 'In danh sách học sinh',
        printStudentsPoints: 'In điểm thi'
    }
    let listId = {
        popup: {
            printStudent: 'print-list-student',
            studentPopup: 'student-popup'
        }
    }
    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveStudent()
    })
    $('#btnAddStudent').on('click', () => {
        isUpdateStudent = false;
        showPopup(listId.popup.studentPopup)
    })
    $('#btnPrintStudentPoints').on('click', () => {
        printListStudent = false;
        callAnythingOneTimes(Print());

    })
    $('#btnPrintListStudent').on('click', () => {
        printListStudent = true;
        callAnythingOneTimes(Print());
    })
    $(document).on('focus', ':input', function () {
        $(this).attr({
            'autocomplete': 'off',
            'maxlength': '255'
        });
    });
    $('.input-group.date').datepicker({});

    // end event

    function Init() {
        let url = {
            deleteStudent: '',
            updateStudent: '',
            addStudent: ''
        }
        let countClick = 0;
        let data = [{
            'SBD': '123123',
            'HoVaTen': 'afasdfasf',
            'DiaChi': '123123123',
            NgaySinh: '9/5/2001',
            CMND: '123123'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteStudent(value));

            },
            'click .js-edit': (e, value, row, index) => {
                isUpdateStudent = true;
                setValueForPopup(row);

                callAnythingOneTimes(updateStudent(value, row))
            }
        }
        let columns = services_table.ManagerStudentTable(events);
        // getApi(url).then((response)=>{
        //     let data = response
        //     services_table.Init('manager_student_table', data, columns, 'SBD');
        // },(err)=>{

        // })
        //let data = response
        services_table.Init('manager_student_table', data, columns, 'SBD');


    }


    // functional 

    function hidePopup(name) {
        $('#' + name + '').modal('hide');
    }

    function showPopup(name) {
        RemoveValidateAll(name)
        $('#' + name + '').modal('toggle');
    }

    function addClass(name, className) {
        if (!name || name === "" || !className || className === "")
            return;
        let div = findDivParent(name)
        $(div).addClass(className);
    }

    function removeClass(name, className) {
        if (!name || name === "" || !className || className === "")
            return;
        let div = findDivParent(name)
        $(div).removeClass(className);
    }

    function findDivParent(name) {
        let div = $('#' + name + '').closest('div');
        if ($(div).hasClass('date')) {
            let parent = $(div).parent()
            return parent;
        }
        return div;
    }

    function setValueForPopup(param) {

        $('#userName').val()
        $('#birthDate').val()
        $('#sex').val()
        $('#identityCard').val()
        $('#address').val()
        showPopup(listId.popup.studentPopup)
    }

    function Print() {
        let param = {
            'province': $('#provinces').val(),
            'regionExam': $('#regionExam').val()
        }
        alert(printListStudent)
        hidePopup(listId.popup.printStudent)
        if (printListStudent) {
            PrintListStudents(param)
        } else {
            PrintStudentsPoints(param)
        }
    }

    function PrintListStudents() {
        getApi('/');
    }

    function PrintStudentsPoints() {
        getApi('/');
    }

    function SaveStudent() {
        if (!validateAll(listId.popup.studentPopup))
            return;
        let param = {
            userName: $('#userName').val(),
            birthDate: $('#birthDate').val(),
            sex: $('#sex').val(),
            identityCard: $('#identityCard').val(),
            address: $('#address').val(),
            userId: $('#userId').val()
        }
        if (isUpdateStudent) {
            updateStudent(param);
        } else {
            addStudent(param);
        }
        //$('#student-popup').modal('hide'); //.modal('toggle');
    }

    function deleteStudent(id) {
        getApi('/');
    }

    function updateStudent(id, student) {
        postApi('/', {})
    }

    function addStudent(student) {
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

    // end functional 
    // validate
    async function validateAll(name) {
        let elementsData = $('#' + name + ' input[type=text],textarea');
        let result = true;
        if (!elementsData || elementsData.length === 0)
            return;
        for await (var item of elementsData) {
            let
                valueItem = $(item).val(),
                id = item.id,
                classError = 'has-error'
            if (id === "userId")
                continue
            if (valueItem !== "" && !!valueItem)
                removeClass(id, classError);
            else {
                addClass(id, classError);
                result = false;
            }
        }
        return result;
    }

    function RemoveValidateAll(name) {
        let elementsData = $('#' + name + ' input[type=text],textarea');
        if (!elementsData || elementsData.length === 0)
            return;
        for (var item of elementsData) {
            let
                valueItem = $(item).val(),
                id = item.id,
                classError = 'has-error'
            if (id === "userId")
                continue
            removeClass(id, classError);
        }
    }

    // end validate



    function getApi(url, param) {
        return $.ajax({
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
        return $.ajax({
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
});