/**
 * Created by alexander on 18.01.2015.
 */

function openEditMenuModal(){
    $("#editMenuModal").modal('show');
}

function saveMenu(){
    $("#editMenuForm").submit();
    $("#editMenuModal").modal('hide');
}

function setMenusOnline(){
    $.ajax({
        url: "menu/setOnline",
        data: JSON.stringify($('#offlineMenusTable').bootstrapTable('getData')),
        contentType: 'application/json',
        accept: 'application/json',
        type: 'POST'
    }).done(function() {
        // refresh the table after setting the menus online
        $('#offlineMenusTable').bootstrapTable('refresh');
    }).fail(function(){
        $('#offlineMenusTable').bootstrapTable('refresh');
    });

}