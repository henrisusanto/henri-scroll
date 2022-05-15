document.addEventListener('scroll', function () {
    var scroll_amount = (((document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight) || 0) * 100)
    scroll_amount = scroll_amount.toFixed(5)
    var progress_bar = document.getElementById("henri-progress-bar")
    progress_bar.setAttribute('style', `--scrollAmount:${scroll_amount}%;`)
    progress_bar.innerHTML = `--scrollAmount:${scroll_amount}%;`;
})