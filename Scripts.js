var slidingPanel;
var buyButton;
var calculatorPanel;
var servicesPanel;
var scrollTopOffset = 0.24;
var buyButtonThreshold = 15;
var calculatorResult = 0;


function NotImplemented()
{
    alert("Функционал этой кнопки ещё не реализован :)");
}




function OnCostSliderValueChange(sd = 0)
{
    sd += 10;
    
}

function OnPageLoad()
{
    //alert("Страничка загружена :)");
    //var backgroundPicture = document.getElementById("backgroundPicture");
    slidingPanel = document.getElementById("slidingPanel");
    buyButton = document.getElementById("buyButton");
    calculatorPanel = document.getElementById("calculatorPanel");
    servicesPanel = document.getElementById("servicesPanel");
    window.addEventListener("scroll", OnScrollEvent);
    
    // window.addEventListener('scroll', function() {
    //     document.getElementById('showScroll').innerHTML = pageYOffset + 'px';
    //   });
}

function TopPanelSlide()
{
    alert("Все работает!");
    // var elmnt = document.getElementById("myDIV");
    // var y = window.scrollY
    // elmnt.scrollLeft = 50;
    // elmnt.scrollTop = 10;
}

function ScrollToTop()
{
    window.scrollTo({top: 0, behavior: 'smooth'});
}
function ScrollToCalculator()
{
    var yPos = calculatorPanel.getBoundingClientRect().top - (window.innerHeight * scrollTopOffset);
    window.scrollTo({top: yPos, behavior: 'smooth'});
}
function ScrollToServices()
{
    var yPos = servicesPanel.getBoundingClientRect().top - (window.innerHeight * scrollTopOffset);
    window.scrollTo({top: yPos, behavior: 'smooth'});
}

function OnScrollEvent()
{
    UpdateTopSlidingPanel();
    UpdateUpButtonSlidingPanel();

    //var pageScrolledPos = document.documentElement.scrollTop;




    // var yPos = buyButton.scrollY;
    // alert(buyButton);
     //alert(buyButtonThreshold);
    //alert(yPos);
    //alert("Скроллинг!");
}

function UpdateTopSlidingPanel()
{
    var yPos = buyButton.getBoundingClientRect().top;
    if (yPos < buyButtonThreshold)
    {
        slidingPanel.classList.add("SlidingPanelActive");
    }
    else
    {
        slidingPanel.classList.remove("SlidingPanelActive");
    }
}

function UpdateUpButtonSlidingPanel()
{

}

function UpdateCostCalculatorResult()
{

}