using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;

namespace bootcamp.Controllers
{
    [ApiController]
    [Route("diaries")]
    public class DiaryController : ControllerBase
    {
        private readonly ILogger<DiaryController> _logger;

        public DiaryController(ILogger<DiaryController> logger)
        {
            _logger = logger;
        }

        [HttpGet]
        public IEnumerable<Diary> Get()
        {
            var rng = new Random();
            return Enumerable.Range(1, 5).Select(index => new Diary
            {
                Id = index,
                Title = "title" + index,
                Body = "body" + index,
                CreatedAt = DateTime.Now,
                UpdatedAt = DateTime.Now,
            })
            .ToArray();
        }
    }
}
