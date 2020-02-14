function edit_row(no) {
    document.getElementById("edit_button" + no).style.display = "none";
    document.getElementById("save_button" + no).style.display = "block";

    var label = document.getElementById("label_row" + no);
    var type = document.getElementById("type_row" + no);

    var label_data = label.innerHTML;
    var type_data = type.innerHTML;

    label.innerHTML = "<input type='text' id='label_text" + no + "' value='" + label_data + "'>";
    type.innerHTML = "<input type='text' id='type_text" + no + "' value='" + type_data + "'>";
}

function save_row(no) {
    var label_val = document.getElementById("label_text" + no).value;
    var type_val = document.getElementById("type_text" + no).value;

    document.getElementById("label_row" + no).innerHTML = label_val;
    document.getElementById("type_row" + no).innerHTML = type_val;

    document.getElementById("edit_button" + no).style.display = "block";
    document.getElementById("save_button" + no).style.display = "none";

    var id_val = no;
    $.post("inline_update.php", { id_val, label_val, type_val });
}