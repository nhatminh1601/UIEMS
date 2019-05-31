let department_table = (function () {
    let table = {}
    table.Init = InitTable
    table.ManagerDepartmentTable = ManagerDepartmentTable
    return table;

    function InitTable(name, data,columns, uniqueId) {
        $('#' + name + '').bootstrapTable('destroy')
        $('#' + name + '').bootstrapTable({
            columns: columns,
            data: data,
            uniqueId: uniqueId,
            search: true,
            pagination: true,
            pageSize: 25
        })
    };

    function ManagerDepartmentTable(events) {
        return [{
                field: 'STT',
                title: 'STT',
                sortable: true,
                searchFormatter: false
            },

            {
                field: 'Ten',
                title: 'Tên phòng ban',
                sortable: true,
                searchFormatter: false
            },
            {
                field: '',
                title: '',
                class: '',
                formatter: formatAction,
                events: events

            }
        ]

    }

    function formatAction(value, row, index) {
        let remove = '<a class="js-remove"><i class="glyphicon glyphicon-remove"></i></a>';
        let edit = '<a class="js-edit" style="margin-right:10px;"><i class="glyphicon glyphicon-pencil"></i></a>';
        return edit + remove;
    }
})();