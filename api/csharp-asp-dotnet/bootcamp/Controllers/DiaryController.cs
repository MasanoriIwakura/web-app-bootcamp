using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Logging;
using bootcamp.Models;

namespace bootcamp.Controllers
{
    [ApiController]
    [Route("diaries")]
    public class DiaryController : ControllerBase
    {
        private readonly ILogger<DiaryController> _logger;
        private readonly MyContext _context;

        public DiaryController(ILogger<DiaryController> logger, MyContext context)
        {
            _logger = logger;
            _context = context;
        }

        [HttpGet]
        public IEnumerable<Diary> Get()
        {
           // return this._context.Diary;
           var list = new List<Diary>();
           list.Add(new Diary(){
                Id = 1, 
                Title = "title", 
                Body = "body", 
                CreatedAt = DateTime.Now,
                UpdatedAt = DateTime.Now,
           });
           return list.ToArray();
        }
    }
}
