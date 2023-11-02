
<?php require 'header.php'; ?>
        <div class="donationbox">
            <form>   
            <div class="columns">
                    <div class="item">
                        <label for="fname">
                            <span class="kannada">> ಪೂರ್ತಿ ಹೆಸರು</span>/Full Name
                            <span>*</span>
                        </label>
                    <input id="fname" type="text" name="fname">
                    </div>
                    <div class="item">
                        <label for="address">
                            <span class="kannada">> ಈಮೈಲ್</span> ID/Email ID
                            <span>*</span>
                        </label>
                    <input id="address" type="text"   name="address" >
                    </div>
                    <div class="item">
                        <label for="phone">
                            <span class="kannada">> ಮೊಬೈಲ್ ಸಂಖ್ಯೆ</span>/Phone Number
                        </label>
                    <input id="phone" type="tel"   name="phone">
                    </div>
                    <div class="item">
                        <label for="saddress">
                            <span class="kannada">> ಪೂರ್ತಿ ವಿಳಾಸ</span>/Full Address
                        </label>
                    <input id="saddress" type="text"   name="city" >
                    </div>
                    <div class="item">
                        <label for="city">
                            <span class="kannada">> ಜಾಗದ ಹೆಸರು</span>/Place
                        </label>
                    <input id="city" type="text"   name="city1" >
                    </div>
                </div>
                <br>
                <fieldset>
                <legend><span class="kannada">ಡೊನೇಷನ್ ಗೆ ಮಾಹಿತಿ</span> / Donation Details</legend>
                <div class="item">
                    <label for="amount">
                        <span class="kannada">> ಡೊನೇಷನ್ ಮೊತ್ತ</span>/Donation Amount :
                        <span>*</span>
                    </label>
                <input id="amount" type="number"   name="amount">
                </div>
                <div class="button-container">
                    <button type="button" onclick="setAmount(2000)">₹2,000</button>
                    <button type="button" onclick="setAmount(5000)">₹5,000</button>
                    <button type="button" onclick="setAmount(10000)">₹10,000</button>
                    <button type="button" onclick="setAmount(25000)">₹25,000</button>
                    <button type="button" onclick="setAmount(50000)">₹50,000</button>
                    <button type="button" onclick="setAmount(100000)">₹1,00,000</button>
                </div>
                </fieldset>
                <div class="btn-block">
                <button type="submit" href="/"><span class="kannada">ಪಾವತಿ</span>/Pay Now</button>
                </div>
            </form>
        </div>
<?php require 'footer.php'; ?>
