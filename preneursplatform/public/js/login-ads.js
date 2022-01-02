var textWrapper = document.querySelector('.login-ads');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
    .add({
        targets: '.brainsterAds .letter',
        opacity: [0, 1],
        easing: "easeInOutQuad",
        duration: 2250,
        delay: (el, i) => 100 * (i+1)
    }).add({
        targets: '.login-ads',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 2000
    });