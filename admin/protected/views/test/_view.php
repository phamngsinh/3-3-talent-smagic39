<div class="view">

    <h2><?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id)); ?></h2>

    <?php
    if (!empty($data->email)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::mailto($data->email);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->age)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->age);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->gender)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->gender);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->city)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->city);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->country)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->country);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->nric)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nric')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->nric);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->mobile_number)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('mobile_number')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->mobile_number);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->landline_number)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('landline_number')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->landline_number);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->timezone)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('timezone')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->timezone);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->url)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo Awecms::formatUrl($data->url,true);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->visits)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('visits')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->visits);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->last_login)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('last_login')); ?>:</b>
            </div>
<div class="field_value">
                <?php
                echo date('D, d M y H:i:s', strtotime($data->last_login));
                ?>

        </div>
        </div>

        <?php
    }
    ?>
    <?php
    if (!empty($data->is_active)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->is_active);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->userid)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->userid);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->username)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->username);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->first_name)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->first_name);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->last_name)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->last_name);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->location)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->location);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->dob)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
            </div>
<div class="field_value">
                <?php
                echo date('D, d M y H:i:s', strtotime($data->dob));
                ?>

        </div>
        </div>

        <?php
    }
    ?>
    <?php
    if (!empty($data->title)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->title);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if (!empty($data->role)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->role);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('is_internal')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo CHtml::encode($data->is_internal == 1 ? 'True' : 'False');
                ?>

            </div>
        </div>
    <?php
    if (!empty($data->full_details)) {
        ?>
    <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('full_details')); ?>:</b>
            </div>
<div class="field_value">

                <?php
                echo nl2br($data->full_details);
                ?>

            </div>
        </div>
        <?php
    }
    ?>
</div>