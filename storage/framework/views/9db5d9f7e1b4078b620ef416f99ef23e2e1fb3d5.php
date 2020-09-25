<?php echo $__env->make('partials.nav_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="wrapper">
    <header>
        <h1>Reserveringen</h1>

        <form id="registrar">
            <input type="text" name="name" placeholder="Iemand uitnodigen">
            <button type="submit" name="submit" value="submit">Toevoegen</button>
        </form>
    </header>

    <div class="main">
        <h2>Genodigden</h2>
        <ul id="invitedList"></ul>
    </div>
</div>
