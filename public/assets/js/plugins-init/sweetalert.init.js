document.querySelector(".sweet-prompt").onclick = function () {
    swal(
        {
            title: "Enter an input !!",
            text: "Write something interesting !!",
            type: "input",
            showCancelButton: !0,
            closeOnConfirm: !1,
            animation: "slide-from-top",
            inputPlaceholder: "Write something",
        },
        function (e) {
            return (
                !1 !== e &&
                ("" === e
                    ? (swal.showInputError("You need to write something!"), !1)
                    : void swal("Hey !!", "You write: " + e, "success"))
            );
        }
    );
};
