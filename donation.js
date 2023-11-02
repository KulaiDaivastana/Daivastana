if (localStorage.getItem('donationAmount')) 
{
    const storedAmount = localStorage.getItem('donationAmount');
    document.getElementById("amount").value = storedAmount;
}
function setAmount(amount) 
{
    document.getElementById("amount").value = amount;
    localStorage.setItem('donationAmount', amount);
}
