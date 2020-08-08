from django.db import models
from django.utils.translation import pgettext_lazy
from django.utils.translation import ugettext_lazy as _
from django.urls import reverse
# Create your models here.
class Info(models.Model):
    name = models.CharField(_("Scheme name"), max_length=100)
    description = models.TextField(_("Description about the scheme"), max_length=250,blank=True)
    registerationlink = models.CharField(_("Registration link"), max_length=150,blank=True)
    pdflink = models.CharField(_("Pdf Link"), max_length=150,blank=True)
    
    def __str__(self):
        return self.name

    def get_absolute_url(self):
        return reverse('infos')

class Query(models.Model):
    question = models.CharField(_("Question"), max_length=50)
    
    def __str__(self):
        return self.question

    def get_absolute_url(self):
        return reverse('queries')

class Comment(models.Model):
    query = models.ForeignKey("Query", verbose_name=_("query"), on_delete=models.CASCADE)
    content = models.TextField(_("Comment"))
    def __str__(self):
        return self.content
    def get_absolute_url(self):
        return reverse('comments')



