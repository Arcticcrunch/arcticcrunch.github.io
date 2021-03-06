// ------------------------ Настройки ---------------------------
var DISABLE_SCROLLING_WHEN_ORDER = false;

// ------------------- Главные переменные -----------------------

var mainPageBorder;             // элемент body
var slidingPanel;
var buyButton;
var calculatorPanel;
var benefitsPanel;
var servicesPanel;
var upButtonFixed;
var upButtonGFX;
var orderPanelBackground;
var orderPanel;
var scrollTopOffset = 0.24;
var buyButtonThreshold = 15;
var upButtonThreshold = 15;
var calculatorResult = 0;


function Redirect()
{
    window.location.href = "https://arcticcrunch.github.ui/mainpage.php";
}


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
    mainPageBorder = document.getElementById("mainPageBorder");
    slidingPanel = document.getElementById("slidingPanel");
    buyButton = document.getElementById("buyButton");
    calculatorPanel = document.getElementById("calculatorPanel");
    benefitsPanel = document.getElementById("benefitsPanel");
    servicesPanel = document.getElementById("servicesPanel");
    upButtonFixed = document.getElementById("upButtonFixed");
    upButtonGFX = document.getElementById("upButtonGFX");
    orderPanelBackground = document.getElementById("orderPanelBackground");
    orderPanel = document.getElementById("orderPanel");
    window.addEventListener("scroll", OnScrollEvent);

    OnScrollEvent();

    //Регистрация кнопки для отправки ассинхронной ajax формы

    $("#OrderButton").click(
		function(){
            SendOrderForm('result_form', 'OrderForm', 'MakeOrder.php');
			return false; 
		}
	);
    
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
    AnimateUpButtonGFX();
}


function ScrollToCalculator()
{
    var yPos = calculatorPanel.getBoundingClientRect().top - (window.innerHeight * scrollTopOffset);
    yPos += window.scrollY;
    window.scrollTo({top: yPos, behavior: 'smooth'});
}
function ScrollToServices()
{
    var yPos = servicesPanel.getBoundingClientRect().top - (window.innerHeight * scrollTopOffset);
    yPos += window.scrollY;
    window.scrollTo({top: yPos, behavior: 'smooth'});
}

function OnScrollEvent()
{
    UpdateTopSlidingPanel();
    UpdateUpButtonSlidingPanel();

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
    var yPos = benefitsPanel.getBoundingClientRect().top;
    
    if (yPos < upButtonThreshold)
    {
        upButtonFixed.classList.remove("UpButtonFixedHidden");
        upButtonGFX.classList.add("UpButtonGFXShown");
    }
    else
    {
        upButtonFixed.classList.add("UpButtonFixedHidden");
        upButtonGFX.classList.remove("UpButtonGFXShown");
        upButtonGFX.classList.remove("UpButtonGFXOnClick");
    }
    
}

function UpButtonOnMouseOver()
{
    upButtonGFX.classList.add("UpButtonGFXOnMouseOver");
}
function UpButtonOnMouseLeave()
{
    upButtonGFX.classList.remove("UpButtonGFXOnMouseOver");
}

function AnimateUpButtonGFX()
{
    upButtonGFX.classList.remove("UpButtonGFXOnMouseOver");
    upButtonGFX.classList.add("UpButtonGFXOnClick");

}


function ShowOrderPanel()
{
    orderPanel.classList.add("OrderPanelShown");
    orderPanelBackground.classList.add("OrderPanelBackgroundShown");
    if(DISABLE_SCROLLING_WHEN_ORDER)
        BlockScrolling();
}
function HideOrderPanel()
{
    orderPanel.classList.remove("OrderPanelShown");
    orderPanelBackground.classList.remove("OrderPanelBackgroundShown");
    if (DISABLE_SCROLLING_WHEN_ORDER)
        EnableScrolling();
}

//Блокировка скроллинга страницы
function BlockScrolling()
{
    mainPageBorder.classList.add("DisableScrollingOnBody");
}
//Включение скроллинга страницы
function EnableScrolling()
{
    mainPageBorder.classList.remove("DisableScrollingOnBody");
}

//Асинхронная отправка ajax формы заказа
function SendOrderForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,                               //url страницы (action_ajax_form.php)
        type:     "POST",                           //метод отправки
        dataType: "html",                           //формат данных
        data: $("#"+ajax_form).serialize(),         // Сеарилизуем объект

        success: function(response) {               //Данные отправлены успешно
            alert("Данные успешно отправлены!");
        	// result = $.parseJSON(response);
        	// $('#result_form').html('Имя: '+result.name+'<br>Телефон: '+result.phonenumber);
    	},
        error: function(response) {                 // Данные не отправлены
            alert("Ошибка при отправке формы заказа!");
            //$('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}


function UpdateCostCalculatorResult()
{

}