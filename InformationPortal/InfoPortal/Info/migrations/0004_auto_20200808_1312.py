# Generated by Django 3.1 on 2020-08-08 13:12

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Info', '0003_auto_20200808_0945'),
    ]

    operations = [
        migrations.AlterField(
            model_name='info',
            name='name',
            field=models.CharField(max_length=100, verbose_name='Scheme name'),
        ),
        migrations.AlterField(
            model_name='info',
            name='pdflink',
            field=models.CharField(blank=True, max_length=100, verbose_name='Pdf Link'),
        ),
        migrations.AlterField(
            model_name='info',
            name='registerationlink',
            field=models.CharField(blank=True, max_length=100, verbose_name='Registration link'),
        ),
    ]