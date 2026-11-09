import { test, expect } from '@playwright/test';
import fs from 'node:fs';

test('capture the current homepage', async ({ page }, testInfo) => {
  const response = await page.goto('/', { waitUntil: 'networkidle' });

  expect(response).not.toBeNull();
  expect(response.ok()).toBeTruthy();
  await expect(page.locator('body')).toBeVisible();
  await expect(page.locator('header img').first()).toBeVisible();
  await expect(page.locator('#hero-title')).toBeVisible();
  await expect(page.locator('#estimate-form')).toBeVisible();
  const services = page.locator('#services');
  await expect(services).toBeVisible();
  await expect(services.locator('.services-card')).toHaveCount(3);
  await expect(services.locator('[data-services-direction]')).toHaveCount(2);
  const serviceAreas = page.locator('#service-areas');
  await expect(serviceAreas).toBeVisible();
  await expect(serviceAreas.locator('iframe[title*="service areas"]')).toHaveCount(1);
  await expect(serviceAreas.locator('li')).toHaveCount(5);
  const testimonials = page.locator('#testimonials');
  await expect(testimonials).toBeVisible();
  await expect(testimonials.locator('.testimonials-card')).toHaveCount(3);
  await expect(testimonials.locator('[data-testimonials-direction]')).toHaveCount(2);
  const team = page.locator('#team');
  await expect(team).toBeVisible();
  await expect(team.locator('.team-card')).toHaveCount(4);
  await expect(team.locator('[data-team-direction]')).toHaveCount(2);
  const aboutItems = page.locator('#about details');
  await expect(aboutItems).toHaveCount(4);
  for (let index = 0; index < await aboutItems.count(); index += 1) {
    const item = aboutItems.nth(index);
    const description = item.locator('p');

    if (await item.evaluate((element) => element.open)) {
      await item.locator('summary').click();
    }

    await item.locator('summary').click();
    await expect(description).toBeVisible();
    await item.locator('summary').click();
    await expect(description).not.toBeVisible();
  }
  const estimateCtas = page.locator('header a[href="#estimate-form"]');
  await expect(estimateCtas.first()).toHaveAttribute('href', '#estimate-form');

  const hasHorizontalOverflow = await page.evaluate(() => document.documentElement.scrollWidth > window.innerWidth);
  expect(hasHorizontalOverflow).toBeFalsy();

  if (testInfo.project.name === 'mobile-390') {
    const mobileMenu = page.locator('header details');
    await mobileMenu.locator('summary').click();
    await expect(mobileMenu.locator('nav')).toBeVisible();
    await mobileMenu.locator('a[href="#estimate-form"]').click();
    await expect(page.locator('#estimate-form')).toBeInViewport();
    await page.evaluate(() => window.scrollTo(0, 0));
    await mobileMenu.locator('summary').click();
    await expect(mobileMenu.locator('nav')).not.toBeVisible();
  } else {
    await page.locator('header a[href="#estimate-form"]:visible').first().click();
    await expect(page.locator('#estimate-form')).toBeInViewport();
    await page.evaluate(() => window.scrollTo(0, 0));
  }

  fs.mkdirSync('artifacts/screenshots', { recursive: true });
  await page.screenshot({
    path: `artifacts/screenshots/${testInfo.project.name}.png`,
    fullPage: true,
  });
});
