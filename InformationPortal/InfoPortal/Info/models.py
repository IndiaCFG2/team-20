from django.db import models
from django.utils.translation import pgettext_lazy
from django.utils.translation import ugettext_lazy as _
# Create your models here.
class Info(models.Model):
    name = models.CharField(_("Scheme name"), max_length=50)
    description = models.TextField(_("Description about the scheme"), max_length=250,blank=True)
    registerationlink = models.CharField(_("Registration link"), max_length=50,blank=True)
    pdflink = models.CharField(_("Pdf Link"), max_length=50,blank=True)
    
    def __str__(self):
        return self.name

   