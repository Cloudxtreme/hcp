<?php
// lib/php/themes/bootstrap/home.php 20150101 - 20180503
// Copyright (C) 2015-2018 Mark Constable <markc@renta.net> (AGPL-3.0)

class Themes_Bootstrap_Home extends Themes_Bootstrap_Theme
{
    public function list(array $in) : string
    {
error_log(__METHOD__);

        return '
        <div class="col-12">
      <h3>
        <i class="fas fa-server fa-fw"></i> NetServa
        <small>(Hosting Control Panel)</small>
      </h3>
      <p class="columns">
This is an ultra simple web based Hosting Control Panel for a lightweight Mail,
Web and DNS server based on Ubuntu Bionic (18.04). It uses PowerDNS for DNS,
Postfix/Dovecot + Spamprobe for SMTP and spam filtered IMAP email hosting along
with nginx + PHP7 FPM + LetsEncrypt SSL for efficient and secure websites. It
can use either SQLite or MySQL as database backends and the SQLite version only
requires <b>60Mb</b> of ram on a fresh install so it is ideal for lightweight
256Mb ram LXD containers or KVM/Xen cloud provisioning.
      </p>
      <p>
Some of the features are...
      </p>
      <ul>
        <li><b>NetServa HCP</b> does not reqire Python or Ruby, just PHP and Bash</li>
        <li>Fully functional Mail server with personalised Spam filtering</li>
        <li>Secure SSL enabled <a href="http://nginx.org/">nginx</a> web server with <a href="http://www.php.net/manual/en/install.fpm.php">PHP FPM 7+</a></li>
        <li>Always based and tested on the latest release of <a href="https://kubuntu.org">*buntu</a></li>
        <li>Optional DNS server for local LAN or real-world DNS provisioning</li>
        <li>Built from the ground up using <a href="https://getbootstrap.com">Bootstrap 4</a> and <a href="https://datatables.net/examples/styling/bootstrap4">DataTables</a></li>
      </ul>
      <p>
Comments and pull requests are most welcome via the Issue Tracker link below.
      </p>
      <p class="text-center">
        <a class="btn btn-primary" href="https://github.com/netserva/hcp">Project Page</a>
        <a class="btn btn-primary" href="https://github.com/netserva/hcp/issues">Issue Tracker</a>
      </p>
      </div>';        
    }
}

?>
