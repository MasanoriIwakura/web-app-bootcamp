using System;
using System.ComponentModel.DataAnnotations.Schema;

namespace bootcamp.Models
{
    [Table("diaries")]
    public class Diary 
    {
        public int Id { get; set; }
        public string Title { get; set; }
        public string Body { get; set; }
        public DateTime CreatedAt { get; set; }
        public DateTime UpdatedAt { get; set; }
    }
}
