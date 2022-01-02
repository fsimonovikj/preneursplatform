document.querySelector("#filter-experience").addEventListener("click", showExperience);
document.querySelector("#filter-biography").addEventListener("click", showBiography);
document.querySelector("#filter-projects").addEventListener("click", showProjects);
hideAll();
showExperience();

function showExperience() {
    hideAll();
    document.querySelector("#experience").checked = true;
    document.querySelector("#biography").checked = false;
    document.querySelector("#projects").checked = false;

    if (document.querySelector("#experience").checked) {
        document.querySelector("#filter-experience").classList.add('checked', 'border-bottom', 'border-info');
        document.querySelector("#filter-biography").classList.remove('checked', 'border-bottom', 'border-info');
        document.querySelector("#filter-projects").classList.remove('checked', 'border-bottom', 'border-info');

        var experienceCards = document.querySelectorAll(".experience");
        for (var i = 0; i < experienceCards.length; i++) {
            experienceCards[i].style.display = "inline-block";
        }
    }
}

function showBiography() {
    hideAll();
    document.querySelector("#biography").checked = true;
    document.querySelector("#experience").checked = false;
    document.querySelector("#projects").checked = false;

    if (document.querySelector("#biography").checked) {
        document.querySelector("#filter-biography").classList.add('checked', 'border-bottom', 'border-info');
        document.querySelector("#filter-experience").classList.remove('checked', 'border-bottom', 'border-info');
        document.querySelector("#filter-projects").classList.remove('checked', 'border-bottom', 'border-info');

        var biographyCards = document.querySelectorAll(".biography");
        for (var i = 0; i < biographyCards.length; i++) {
            biographyCards[i].style.display = "inline-block";
        }
    }
}

function showProjects() {
    hideAll();
    document.querySelector("#projects").checked = true;
    document.querySelector("#biography").checked = false;
    document.querySelector("#experience").checked = false;

    if (document.querySelector("#projects").checked) {
        document.querySelector("#filter-projects").classList.add('checked', 'border-bottom', 'border-info');
        document.querySelector("#filter-experience").classList.remove('checked', 'border-bottom', 'border-info');
        document.querySelector("#filter-biography").classList.remove('checked', 'border-bottom', 'border-info');
        var projectCards = document.querySelectorAll(".projects");
        for (var i = 0; i < projectCards.length; i++) {
            projectCards[i].style.display = "inline-block";
        }
    }
    // } else {
    //     document.querySelector("#filter-projects").classList.remove('checked');
    //     showAll();
    // }        
}

function hideAll() {
    var feeds = document.querySelectorAll(".feed");
    for (var i = 0; i < feeds.length; i++) {
        feeds[i].style.display = "none";
    }
}

function showAll() {
        var feeds = document.querySelectorAll(".feed");
        for(var i = 0; i < feeds.length; i++) {
            feeds[i].style.display = "inline-block";
        }
    }