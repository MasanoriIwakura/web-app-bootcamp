using System;

using Microsoft.EntityFrameworkCore;

namespace bootcamp.Models
{
    public class MyContext : DbContext
    {
        public MyContext(DbContextOptions options) : base(options)
        {
        }

        public DbSet<Diary> Diary { get; set; }
    }
}
