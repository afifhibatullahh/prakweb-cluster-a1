var i = 4;
function tambah() {
    var nama = document.getElementById("new").value;
    var ul = document.getElementById("ul");
    var newList = document.createElement("li");
    newList.setAttribute("id", i);
    addNew(newList, nama);
    ul.append(newList);
    i++;
}

function hapus(id) {
    document.getElementById(id).remove();
}

function mEdit(id) {
    var nama = prompt("Masukkan nama baru: ", document.getElementById(id).innerText.split(" | ")[0]);
    if (nama != null) {
        var li = document.getElementById(id);
        li.innerHTML = "";
        mAddNew(li, nama, id);
    }
}

function addNew(li, nama, id) {
    li.append(nama + " | ");
    li.append(mEdit(id));
    li.append(" | ");
    li.append(hapus(id));
}

function mEdit(id = i) {
    var edit = document.createElement("a");
    edit.setAttribute("onclick", "edit(" + id + ")");
    edit.append("Edit");
    return edit;
}

function hapus(id = i) {
    var edit = document.createElement("a");
    edit.setAttribute("onclick", "hapus(" + id + ")");
    edit.append("Hapus");
    return edit;
}