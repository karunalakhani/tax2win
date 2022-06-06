# Generated by Django 3.0.8 on 2022-06-06 11:52

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('tax2win', '0004_services'),
    ]

    operations = [
        migrations.AlterField(
            model_name='services',
            name='services',
            field=models.CharField(choices=[('ECA', 'ECA'), ('Direct Taxation Advice', 'Direct Taxation Advice'), ('ITR Filling', 'ITR Filling'), ('File Revised Return', 'File Revised Return'), ('Company Formation', 'Company Formation'), ('Registration and Formation of LLPs', 'Registration and Formation of LLPs'), ('MCA 21 Compilances', 'MCA 21 Compilances'), ('GST Registration', 'GST Registration'), ('Income Tax Assessment and Appeals', 'Income Tax Assessment and Appeals'), ('Virtual CFO Book keeping and Accountancy', 'Virtual CFO Book keeping and Accountancy')], max_length=50),
        ),
    ]
