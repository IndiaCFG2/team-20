from django.contrib import admin
from .models import Info,Comment,Query
# Register your models here.
admin.site.register(Info)
admin.site.register(Comment)
admin.site.register(Query)