function impostaStile() {
    var color = $("#color").val();
    if (color != '') {
        $("#preview").css("color", color);
    } else {
        $("#preview").removeAttr("color");
    }

    var character = $("#character").val();
    if (character != '') {
        $("#preview").css("font-family", character);
    } else {
        $("#preview").removeAttr("font-family");
    }

    var size = $("#size").val();
    if (size != '') {
        $("#preview").css("font-size", size + "px");
    } else {
        $("#preview").removeAttr("font-size");
    }

    var backgr = $("#backgr").val();
    if (backgr != '') {
        $("#preview").css("background-color", backgr);
    } else {
        $("#preview").removeAttr("background-color");
    }

    var border = $("#border").val();
    if (border != '') {
        $("#preview").css("border-color", border);
    } else {
        $("#preview").removeAttr("border-color");
    }

    var spacing = $("#spacing").val();
    if (spacing != '') {
        $("#preview").css("letter-spacing", spacing + "px");
    } else {
        $("#preview").removeAttr("letter-spacing");
    }

    var visibility = $("select[name='visibility']").val();
    if (visibility == 'Lowercase') {
        $("#preview").css("text-transform", "lowercase");
    } else if (visibility == 'Uppercase') {
        $("#preview").css("text-transform", "uppercase");
    } else {
        $("#preview").css("text-transform", "none");
    }
}

function invertiVisibilità() {
    $("#preview").toggle();
}

var interval = undefined;

function avviaTimer() {
    var preview = $("#preview");
    var clicked = preview.data("clicked") || false;
	var blinkButton = $("#blink");

    if (clicked) {
        clearInterval(interval);
        preview.data("clicked", false);
		blinkButton.val("Blinking Effect");
    } else {
        interval = setInterval(function () {
            preview.toggle();
        }, 500);
        preview.data("clicked", true);
		blinkButton.val("Reset");
    }
}
