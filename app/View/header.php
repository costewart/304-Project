<header>
    <ul class="horizontal">
        <?php $options = [
            ["/Unit/index", "Unit"],
            ["/Tenant/index", "Tenant"],
            ["/Owner/index", "Owner"],
            ["/ViewingAppointment/index", "PropertyManager"],
            ["/Contract/index", "Contract"],
        ];
        foreach ($options as $index => $option): ?>
            <li>
                <a class="<?php if (isset($activeTab) && $index == $activeTab) echo "active"?>"
                   href="<?php echo $option[0]?>"><?php echo $option[1]?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</header>