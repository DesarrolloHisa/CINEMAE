using Microsoft.AspNetCore.Mvc;

namespace CINEMAE.Controllers
{
    public class CheckOutController : Controller
    {
        private readonly ILogger<CheckOutController> _logger;

        public CheckOutController(ILogger<CheckOutController> logger)
        {
            _logger = logger;
        }

        public IActionResult Payment()
        {
            return View();
        }
    }
}
