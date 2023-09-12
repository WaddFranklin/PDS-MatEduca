function activePage(){

    const navlinks = document.querySelectorAll('.nav-link');
    const windowsPathname = window.location.pathname;

    navlinks.forEach(navlink => {

        const navLinkPathname = new URL(navlink.href).pathname
        console.log(`${navLinkPathname} é o mesmo que ${windowsPathname}?`);

        if(windowsPathname === navLinkPathname || (windowsPathname === '/welcome.blade.php' && navLinkPathname === '/'))navlink.classList.add('active');
        else{
            if(navlink.classList.contains('active'))navlink.classList.remove('active');
        }
    })

}

activePage();
