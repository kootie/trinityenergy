<style>
    body{
        background: #f8f3f3;
        font-family: 'Roboto', sans-serif;
    }
    .mytabs{
        display: flex;
        flex-wrap: wrap;
        max-width: 600px;
        margin: 50px auto;
        padding: 25px;
    }

    .mytabs input[type="radio"] {
        display: none;
    }

    .mytabs label {
        padding: 25px;
        background: #0071b4;
        font-weight: bold;
    }

    .mytabs .tab {
        width: 100%;
        padding: 20px;
        background: #fff;
        order: 1;
        display: none;
    }

    .mytabs .tab {
        font-size: 1em;
    }

    .mytabs input[type="radio"]:checked + label + .tab{
        display: block;
    }

    .mytabs input[type="radio"]:checked + label {
        background: #fff;
    }
        


</style>
<div class="mytabs">
    <input type="radio" id="tabfree" name="mytabs" checked="checked">
    <label for="tabfree">Charles Taban</label>
    <div class="tab">
        <h2>Charles Taban</h2>
        <img src="{{ asset('front-assets/img/testimonial/testimonial.jpg') }}" width="500" height="600" alt="">
        <p>
            Charles Taban a taxi driver in Juba, South Sudan, he has been in the transport industry for many
            years. The greatest challenge that he has faced has been the instability of fuel prices which have
            affected his business operations.
            Trinity Energy is my only preferred fuel station. I have been using its products since its
            establishment in South Sudan back in 2013. Their fuel quality is excellent, and their pricing is
            affordable compared to other fuel stations. I strongly recommend Trinity Energy’s fuel to everyone
            who is looking for reliable, quality and affordable fuel.”
        </p>
    </div>

    <input type="radio" id="tabsilver" name="mytabs">
    <label for="tabsilver">Leone Deneki Peter</label>
    <div class="tab">
        <h2>Leone Deneki Peter</h2>
        <img src="{{ asset('front-assets/img/testimonial/testimonial2.jpg') }}" width="500" height="600" alt="">
        <p>
            A volunteer with Right for All Organization (RFAO), is a devoted customer who
            holds a deep appreciation for Trinity Energy products. He shares,I recommend Trinity Energy to all
            fellow customers. Trinity Energy is the largest fuel supplier in the country and is widely trusted and
            sought after in South Sudan. I personally rely on their fuel for both my car and motorcycle, and I have
            found the quality to be more than satisfactory. It was worth noting that Trinity Energy also serves
            aviation companies.
        </p>
    </div>

</div>