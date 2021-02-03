let calendarCells = document.querySelectorAll(".cusCol");
let calendarDays = document.querySelectorAll(".days");
let cellBefore;

let actualDayText = document.getElementById("actualDayText");
let selectSubmit = document.getElementById("submitBtn");
let selectYear = document.getElementById("selectYear");
let selectMonth = document.getElementById("selectMonth");
let formHero = document.getElementById("formHero");

resizeCells();
resizeSelectBar();

window.addEventListener("resize", e => {
    resizeCells();
    resizeSelectBar();
});

function resizeCells() {
    if (screen.availWidth < 576 || window.innerWidth < 576) {
        calendarCells.forEach(e => {
            e.style.height = "50px";
            e.style.width = "100%";
            e.style.border = "none";
            if (e.classList.contains("bg-darker")) {
                e.style.display = "none";
            }
        })
        calendarDays.forEach(e => {
            e.style.display = "block";
        })
    }
    else {
        calendarCells.forEach(e => {
            e.style.width = (100 / 7) + "%";
            e.style.border = "1px solid var(--custom-color-gray)";
            if (e.classList.contains("bg-darker") && e.style.display == "none") {
                e.style.display = "block";
            }

            if (cellBefore != null && e.style.height != cellBefore) {
                e.style.height = cellBefore;
            }
            else {
                e.style.height = e.getBoundingClientRect().width + "px";
                cellBefore = e.style.height;
            }
        })
        calendarDays.forEach(e => {
            e.style.display = "none";
        })
    }

    actualDayText.style.fontSize = "0px";
    actualDayText.style.fontSize = actualDayText.getBoundingClientRect().height + "px";
    (actualDayText.parentElement.classList.contains("bg-red")) ? actualDayText.style.color = "var(--custom-color-gold)" : actualDayText.style.color = "var(--custom-color-red)";

}

function resizeSelectBar() {
    if (screen.availWidth < 576 || window.innerWidth < 576) {
        selectSubmit.style.fontSize = "unset";
        selectSubmit.style.width = "30%";
        selectSubmit.style.padding = "0";
        selectYear.style.fontSize = "unset";
        selectMonth.style.fontSize = "unset";
        formHero.style.width = "100%";
    }
    else {
        selectSubmit.style.fontSize = "initial";
        selectSubmit.style.width = "initial";
        selectSubmit.style.padding = ".375rem .75rem";
        selectYear.style.fontSize = "initial";
        selectMonth.style.fontSize = "initial";
        formHero.style.width = "90%";
    }
}

        // console.log("width 1 " + document.body.clientWidth);
        // console.log("width 2 " + screen.width);
        // console.log("width 3 " + screen.availWidth);
        // console.log("width 4 " + window.innerWidth);
        // console.log("width 5 " + window.outerWidth);