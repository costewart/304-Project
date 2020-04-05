<header>
    <ul class="horizontal">
        <?php $options = [
            ["/Unit/index", "Unit"],
            ["/Tenant/index", "Tenant"],
            ["/Owner/index", "Owner"],
            ["/ViewingAppointment/index", "PropertyManager"],
            ["/Contract/index", "Contract"],
            ["/AvailableUnits/index", "AvailableUnits"],
            ["/CityStats/index", "CityStats"],
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