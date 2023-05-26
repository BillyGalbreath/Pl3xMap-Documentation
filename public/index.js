const offset = 150
const topBtn = document.getElementById('topBtn')
const sections = document.querySelectorAll('section')
const navLinks = document.querySelectorAll('nav a')
const modal = document.querySelector('dialog')
let current
setTimeout(() => goto(window.location.pathname.substring(1)), 0)
window.onscroll = function () { onScroll() }
navLinks.forEach(link => {
    link.onclick = (e) => {
        e.preventDefault()
        goto(link.getAttribute('href').substring(1))
    }
})
document.querySelector('#pi').onclick = (e) => {
    if (e.shiftKey && e.ctrlKey) if (e.altKey)
        document.querySelector('#d2').showModal()
    else document.querySelector('#d1').showModal()
}
modal.onclick = (e) => {
    const d = modal.getBoundingClientRect()
    if (e.clientX < d.left || e.clientX > d.right || e.clientY < d.top || e.clientY > d.bottom) modal.close()
}
const setCur = debounce((cur) => {
    window.history.replaceState(null, 'title', (current = cur)?.getAttribute('href') ?? '/')
})
function onScroll() {
    if (window.scrollY > 1000) {
        topBtn.classList.add('shown')
    } else {
        topBtn.classList.remove('shown')
    }
    let cur
    const links = []
    for (let i = 0; i < sections.length; i++) {
        const min = sections[i].offsetTop - offset
        const max = sections[i + 1]?.offsetTop - offset
        if (window.scrollY >= min && (isNaN(max) || window.scrollY < max)) {
            check(links, sections[i].id)
        }
    }
    navLinks.forEach(link => {
        if (links.includes(link)) {
            link?.parentElement.classList.add('active')
            cur = link
        } else {
            link?.parentElement.classList.remove('active')
        }
    })
    if (current != cur) {
        setCur(cur)
    }
}
function check(links, id) {
    links.push(document.querySelector('nav a[href$=\'' + id + '\']'))
    if (id?.includes('/')) {
        check(links, id.substring(0, id.indexOf('/')))
    }
}
function goto(id) {
    const el = id ? document.getElementById(id) : undefined
    const top = (el?.offsetTop ?? 0) - offset / 2
    window.scrollTo({ top: top, behavior: 'smooth' })
    document.documentElement.scrollTo({ top: top, behavior: 'smooth' })
    window.history.pushState(null, 'title', '/' + (el?.id ?? ''))
}
function debounce(func, timeout = 250) {
    let timer
    return (...args) => {
        clearTimeout(timer)
        timer = setTimeout(() => func.apply(this, args), timeout)
    }
}
