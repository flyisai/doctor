/**
 * Created by Thinkpad on 2014/6/9.
 */
<script type="text/templete" id="home-templete">
    <form class="find-your-phone">
        <legend>FIND YOUR PHONE</legend>
        <input type="text" name="Phone" placeholder="Cell Phone Name" />
        <br />
        <select name="Brand" placeholder="Brand">
            <option value="All">All</option>
            <option value="Motorola">Motorola</option>
            <option value="Dell">Dell</option>
            <option value="Samsung">Samsung</option>
            <option value="LG">LG</option>
            <option value="Nexus">Nexus</option>
        </select>
        <br />
        <input type="text" name="Location" placeholder="City/Landmark/PostCode"/>
        <br />
        <input type="checkbox" name="near" value="true"/>near by
        <input type="text" disabled="disabled" style="width: 40px" name="Distance" />km
        <hr />
        <button type="Submit" class="btn btn-primary">Find Doctor</button>
    </form>
</script>