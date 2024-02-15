import discord
from discord.ext import commands

# Botu oluştur
bot = commands.Bot(command_prefix='!')

# Botun hazır olduğunda yapılacak işlemler
@bot.event
async def on_ready():
    print(f'{bot.user.name} is ready!')

# !hello komutu
@bot.command(name='hello')
async def hello(ctx):
    await ctx.send('Hello!')

# Botu çalıştır
bot.run('MTIwNzc1MDA5MDcxOTEwMDkzOQ.GO-eKZ.s6pe9s2lEqlmvxRxUraEr84nKG3FMZ1A81IrLM')
