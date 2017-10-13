<?php

$this->title = 'Use of cookies';

?>
<div class="page-header">
    <h1>Use of cookies</h1>
</div>
<p class="lead">
    What is a Cookie File?
</p>

<p>
    An HTTP cookie (also called web cookie, Internet cookie, browser cookie, or simply cookie) is a small piece of data
    sent from a website and stored on the user's computer by the user's web browser while the user is browsing. Cookies
    were designed to be a reliable mechanism for websites to remember stateful information (such as items added in the
    shopping cart in an online store) or to record the user's browsing activity (including clicking particular buttons,
    logging in, or recording which pages were visited in the past). They can also be used to remember arbitrary pieces
    of information that the user previously entered into form fields such as names, addresses, passwords, and credit
    card numbers.
</p>

<p>
    Other kinds of cookies perform essential functions in the modern web. Perhaps most importantly, authentication
    cookies are the most common method used by web servers to know whether the user is logged in or not, and which
    account they are logged in with. Without such a mechanism, the site would not know whether to send a page containing
    sensitive information, or require the user to authenticate themselves by logging in. The security of an
    authentication cookie generally depends on the security of the issuing website and the user's web browser, and on
    whether the cookie data is encrypted. Security vulnerabilities may allow a cookie's data to be read by a hacker,
    used to gain access to user data, or used to gain access (with the user's credentials) to the website to which the
    cookie belongs (see cross-site scripting and cross-site request forgery for examples).
</p>

<p>
    The tracking cookies, and especially third-party tracking cookies, are commonly used as ways to compile long-term
    records of individuals' browsing histories – a potential privacy concern that prompted European and U.S.
    lawmakers to take action in 2011. European law requires that all websites targeting European Union member
    states gain "informed consent" from users before storing non-essential cookies on their device.
</p>

<p class="lead">
    Origin of the name
</p>

<p>
    The term "cookie" was coined by web browser programmer Lou Montulli. It was derived from the term "magic cookie",
    which is a packet of data a program receives and sends back unchanged, used by Unix programmers.
</p>


<p class="lead">
    History
</p>

<p>
    Magic cookies were already used in computing when computer programmer Lou Montulli had the idea of using them in web
    communications in June 1994. At the time, he was an employee of Netscape Communications, which was developing an
    e-commerce application for MCI. Vint Cerf and John Klensin represented MCI in technical discussions with Netscape
    Communications. MCI did not want its servers to have to retain partial transaction states, which led them to ask
    Netscape to find a way to store that state in each user's computer instead. Cookies provided a solution to the
    problem of reliably implementing a virtual shopping cart.
</p>

<p>
    Together with John Giannandrea, Montulli wrote the initial Netscape cookie specification the same year. Version
    0.9beta of Mosaic Netscape, released on October 13, 1994, supported cookies. The first use
    of cookies (out of the labs) was checking whether visitors to the Netscape website had already visited the site.
    Montulli applied for a patent for the cookie technology in 1995, and US 5774670 was granted in 1998. Support for
    cookies was integrated in Internet Explorer in version 2, released in October 1995.
</p>

<p>
    The introduction of cookies was not widely known to the public at the time. In particular, cookies were accepted by
    default, and users were not notified of their presence. The general public learned about cookies after the Financial
    Times published an article about them on February 12, 1996. In the same year, cookies received a lot of media
    attention, especially because of potential privacy implications. Cookies were discussed in two U.S. Federal Trade
    Commission hearings in 1996 and 1997.
</p>

<p>
    The development of the formal cookie specifications was already ongoing. In particular, the first discussions about
    a formal specification started in April 1995 on the www-talk mailing list. A special working group within the
    Internet Engineering Task Force (IETF) was formed. Two alternative proposals for introducing state in HTTP
    transactions had been proposed by Brian Behlendorf and David Kristol respectively. But the group, headed by Kristol
    himself and Lou Montulli, soon decided to use the Netscape specification as a starting point. In February 1996, the
    working group identified third-party cookies as a considerable privacy threat. The specification produced by the
    group was eventually published as RFC 2109 in February 1997. It specifies that third-party cookies were either not
    allowed at all, or at least not enabled by default.
</p>

<p>
    At this time, advertising companies were already using third-party cookies. The recommendation about third-party
    cookies of RFC 2109 was not followed by Netscape and Internet Explorer. RFC 2109 was superseded by RFC 2965 in
    October 2000.
</p>

<p>
    RFC 2965 added a Set-Cookie2 header, which informally came to be called "RFC 2965-style cookies" as opposed to the
    original Set-Cookie header which was called "Netscape-style cookies". Set-Cookie2 was seldom used however,
    and was deprecated in RFC 6265 in April 2011 which was written as a definitive specification for cookies as used in
    the real world.
</p>
