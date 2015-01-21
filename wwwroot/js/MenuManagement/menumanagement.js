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