'use strict';
$(function () {
    let message = {
        valueEmpty: "Không có dữ liệu, xin vui lòng nhập Tên CMND hoặc Ngày sinh. Xin cám ơn."
    }
    let columnsInfo = {
        columns: [{
                field: 'PhongThi',
                title: 'Phòng Thi',
                // class: 'center',
                //   events: vm.ITRequestEvents
            },
            {
                field: 'NgayThi',
                title: 'Ngày Thi',
                // class: 'maxWidth110Css openPopup',
                sortable: true

            },
            {
                field: 'ThoiGian',
                title: 'Thời Gian',
                class: 'maxWidth110Css text-right',
                sortable: true

            },
            {
                field: 'CaThi',
                title: 'Ca Thi',
                class: 'maxWidth110Css text-right',
                sortable: true

            }, {
                field: 'DiaDiem',
                title: 'Địa điểm',
                class: 'maxWidth110Css text-right',
                sortable: true

            }
        ]
    };

    let columnsPoints = {
        columns: [{
                field: 'SBD',
                title: 'SBD',
                // class: 'center',
                //   events: vm.ITRequestEvents
            },
            {
                field: 'NgayThi',
                title: 'Ngày Thi',
                // class: 'maxWidth110Css openPopup',
                sortable: true

            },
            {
                field: 'MonThi',
                title: 'Môn thi',
                class: 'maxWidth110Css text-right',
                sortable: true

            },
            {
                field: 'Diem',
                title: 'Điểm',
                class: 'maxWidth110Css text-right',
                sortable: true

            },
            {
                field: 'Khoi',
                title: 'Khối thi',
                class: 'maxWidth110Css text-right',
                sortable: true

            }
        ]
    };

    let columnStudentInfo = {
        columns: [{
                field: 'SBD',
                title: 'SBD',
                // class: 'center',
                //   events: vm.ITRequestEvents
            },
            {
                field: 'HoTen',
                title: 'Họ tên',
                // class: 'maxWidth110Css openPopup',
                sortable: true

            },
            {
                field: 'NgaySinh',
                title: 'Ngày sinh',
                class: 'maxWidth110Css text-right',
                sortable: true

            },
            {
                field: 'GioiTinh',
                title: 'Giới thính',
                class: 'maxWidth110Css',
                sortable: true

            },
            {
                field: 'NoiSinh',
                title: 'Nơi sinh',
                class: 'maxWidth110Css',
                sortable: true

            },
            {
                field: 'CMND',
                title: 'CMND',
                class: 'maxWidth110Css',
                sortable: true

            }
        ]
    };

    let dataInfo = [{
        PhongThi: 'C33',
        NgayThi: '14/5/2019',
        ThoiGian: '7:00',
        CaThi: "Sáng",
        DiaDiem: "227 NVC Quận 5 HCM"
    }]

    let dataPoints = [{
            SBD: '123123',
            NgayThi: '14/5/2019',
            MonThi: "Lý",
            Diem: "10",
            Khoi: "A"
        },
        {
            SBD: '123123',
            NgayThi: '14/5/2019',
            MonThi: "Lý",
            Diem: "10",
            Khoi: "A"
        },
        {
            SBD: '123123',
            NgayThi: '14/6/2019',
            MonThi: "Hoá",
            Diem: "10",
            Khoi: "A"
        }
    ]

    let dataStudentInfo = [{
        SBD: '123123',
        HoTen: 'Nguyen Van A',
        NgaySinh: '14/5/2019',
        GioiTinh: "Nam",
        NoiSinh: "HCM Thu Duc",
        CMND: "123123"
    }]

    $('#birthdate').datepicker({
        uiLibrary: 'bootstrap4'
    });

    service.InitTable('table-student', columnsInfo.columns, dataInfo);
    service.InitTable('table-points', columnsPoints.columns, dataPoints);
    service.InitTable('table-student-info', columnStudentInfo.columns, dataStudentInfo);

    $('#btnSearchInfo').on('click', () => {
        service.ValidateData('formInfo').then(function(check){
            if (check) {
                $('#messageError').html(message.valueEmpty)
                $('#divError').removeClass('d-none')
            } else {
                $('#divError').addClass('d-none')
                $('#result-info').removeClass('d-none')
            }
        }, (err) => {
            console.log('err')
        })
    })

});
let service = (function () {

    var obj = {};
    obj.InitTable = InitTable
    obj.ValidateData = ValidateData
    return obj;

    function InitTable(tableName, columns, data) {
        $('#' + tableName + '').bootstrapTable('destroy')
        $('#' + tableName + '').bootstrapTable({
            // toolbar: '#custom-toolbar-projectdocuments',
            //showColumns: showColumn,
            //onClickCell: clickCell,
            // sortName: 'FileLeafRef',
            // sortOrder: 'asc',
            // sortName: 'AV_VRCompanyName',
            //search: search,
            //uniqueId: uniqueId,
            //searchAlign: 'right',
            //idField: 'Id',
            columns: columns,
            data: data,
            //onPostBody: onPostBody,
        })
    }

    function ValidateData(name) {
        let lstInput = $("#" + name + " input");
        let count = lstInput.length;
        let check = false;
        var dfd = jQuery.Deferred();
        if (!lstInput || count === 0) {
            dfd.reject(false);
        }
        let countItem = 0;
        for (let i = 0; i < count; i++) {
            let input = lstInput[i],
            value = input.value;
          
            if (!!value && value !== ""){
                dfd.resolve(false);
                check = true
            }
            countItem++;
            if (count === countItem && !check)
                dfd.resolve(true);
           

        }
        return dfd.promise();
    }



})();