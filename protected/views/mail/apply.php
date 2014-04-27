<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width">

            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <title> <?php echo $job_title ?></title>

                <style type="text/css">
                    .content{
                        width: 500px;
                        margin: 0 auto;
                    }

                </style>
                </head>
                <body bgcolor="#FFFFFF">

                    <div class="content">
                        <table>
                            <tbody>
                                <tr><td>Dear <?php echo $name ?></td></tr>
                                <tr><td>Thank you for sending your resume for the following job post</td></tr>
                                <tr><td>Job Name :<?php echo $job_title ?></td></tr>
                                <?php if ($recruiter): ?><tr><td>Recruiter Name : <?php echo $recruiter ?></td></tr><?php endif; ?>
                                <?php if ($recruiter_email): ?><tr><td>Recruiter Email : <?php echo $recruiter_email ?></td></tr><?php endif; ?>
                                <tr><td>Confirm Link : <a target="_blank" href="<?php echo $confirm_link ?>">Confirm Applied</a></td></tr>

                            </tbody>
                        </table>
                    </div>
                </body>

                </html>