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
